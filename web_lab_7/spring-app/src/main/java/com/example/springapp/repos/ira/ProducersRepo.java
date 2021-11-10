package com.example.springapp.repos.ira;

import com.example.springapp.models.ira.Producers;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface ProducersRepo extends JpaRepository<Producers,Integer> {

}
